// use std::env;
// use std::fmt;
use std::process::Command;

fn main() {
    // let argv: Vec<String> = env::args().collect();
    let _output = if cfg!(target_os = "windows") {
        Command::new("php")
            .arg("outline.phar")
            .status()
            .expect("failed to run outline")
    } else {
        Command::new("php")
            .arg("outline.phar")
            .status()
            .expect("failed to run outline")
    };
}
