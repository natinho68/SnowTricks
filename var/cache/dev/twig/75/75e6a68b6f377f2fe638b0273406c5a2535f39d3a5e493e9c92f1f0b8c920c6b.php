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
        $__internal_9c19262d021197d180d848d433c19dd26f7c5c60fe2d09d7915001ef2062a9e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c19262d021197d180d848d433c19dd26f7c5c60fe2d09d7915001ef2062a9e1->enter($__internal_9c19262d021197d180d848d433c19dd26f7c5c60fe2d09d7915001ef2062a9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b81ce48b4529e2dff524e3786b4af79ea4b4fdf386033394053880aeb02c2dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81ce48b4529e2dff524e3786b4af79ea4b4fdf386033394053880aeb02c2dfa->enter($__internal_b81ce48b4529e2dff524e3786b4af79ea4b4fdf386033394053880aeb02c2dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9c19262d021197d180d848d433c19dd26f7c5c60fe2d09d7915001ef2062a9e1->leave($__internal_9c19262d021197d180d848d433c19dd26f7c5c60fe2d09d7915001ef2062a9e1_prof);

        
        $__internal_b81ce48b4529e2dff524e3786b4af79ea4b4fdf386033394053880aeb02c2dfa->leave($__internal_b81ce48b4529e2dff524e3786b4af79ea4b4fdf386033394053880aeb02c2dfa_prof);

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
