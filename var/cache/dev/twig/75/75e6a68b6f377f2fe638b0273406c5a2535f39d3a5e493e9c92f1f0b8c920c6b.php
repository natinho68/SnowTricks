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
        $__internal_49287ce074f672f075a0a1427ce64e21c3a60e201351b40b36d237a0af0bce8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49287ce074f672f075a0a1427ce64e21c3a60e201351b40b36d237a0af0bce8f->enter($__internal_49287ce074f672f075a0a1427ce64e21c3a60e201351b40b36d237a0af0bce8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6ed3ecc24b6b8822fa158b570d3ce0358b220daf3c5243ffde854f9bb4918f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed3ecc24b6b8822fa158b570d3ce0358b220daf3c5243ffde854f9bb4918f6e->enter($__internal_6ed3ecc24b6b8822fa158b570d3ce0358b220daf3c5243ffde854f9bb4918f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_49287ce074f672f075a0a1427ce64e21c3a60e201351b40b36d237a0af0bce8f->leave($__internal_49287ce074f672f075a0a1427ce64e21c3a60e201351b40b36d237a0af0bce8f_prof);

        
        $__internal_6ed3ecc24b6b8822fa158b570d3ce0358b220daf3c5243ffde854f9bb4918f6e->leave($__internal_6ed3ecc24b6b8822fa158b570d3ce0358b220daf3c5243ffde854f9bb4918f6e_prof);

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
