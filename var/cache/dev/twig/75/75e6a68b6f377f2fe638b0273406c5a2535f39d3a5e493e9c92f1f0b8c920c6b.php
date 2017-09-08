<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_21c8a174344e63b6b17e0a297183eb3f0255c9d11f7beec7f5a9d6f2d7d8b174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dff9323305d27adaac7bc350c996c2d0cb4137b41d46f1c6ac5e1aa54df66357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff9323305d27adaac7bc350c996c2d0cb4137b41d46f1c6ac5e1aa54df66357->enter($__internal_dff9323305d27adaac7bc350c996c2d0cb4137b41d46f1c6ac5e1aa54df66357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_679c4e2fee470eee636ca1693c843c57cf7f1b3846753d93729b259368cf5555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_679c4e2fee470eee636ca1693c843c57cf7f1b3846753d93729b259368cf5555->enter($__internal_679c4e2fee470eee636ca1693c843c57cf7f1b3846753d93729b259368cf5555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_dff9323305d27adaac7bc350c996c2d0cb4137b41d46f1c6ac5e1aa54df66357->leave($__internal_dff9323305d27adaac7bc350c996c2d0cb4137b41d46f1c6ac5e1aa54df66357_prof);

        
        $__internal_679c4e2fee470eee636ca1693c843c57cf7f1b3846753d93729b259368cf5555->leave($__internal_679c4e2fee470eee636ca1693c843c57cf7f1b3846753d93729b259368cf5555_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
