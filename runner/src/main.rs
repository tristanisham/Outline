use std::env;
use std::time::{Instant};
// use std::fmt;
/// * `$program` - Required name of program
#[macro_export]
macro_rules! run {
    ($program: expr, $($arg: expr),*) => {{
        std::process::Command::new($program)
            .args(&[$($arg,)*])
            .status()
            .expect("Failed to run!");
        }
    }
}

fn main() {
    let timer = Instant::now();
    let argv: Vec<String> = env::args().collect();
    if cfg!(target_os = "windows") {
        outline(argv);
    } else {
        outline(argv);
    };
    println!("Outline complete in: {}s", timer.elapsed().as_secs_f32());
}

fn outline(args: Vec<String>) {
    match args.get(1) {
        Some(_) => match args[1].as_str() {
            "build" => match args.get(2) {
                Some(x) => run!("php", "./outline.phar", "build", x),
                None => run!("php", "./outline.phar"),
            },
            _ => run!("php", "./outline.phar"),
        },
        None => run!("php", "./outline.phar"),
    }
}
